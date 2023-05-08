<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Models\Customer;
use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Mail\RegisterMarckdown;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    //La class, le controller qui va gérer les utilisateurs

    public function loginclient()
    {
		if( session()->has('nom') AND session()->has('prenom'))
		{
			session()->pull('nom');
			session()->pull('prenom');	
		}
        return view('login_client');
    }

    public function loginadmin()
    {
		if( session()->has('pseudo'))
		{
			session()->pull('pseudo');
		}
        return view('admin/admin_login');
    }

    public function addcustomer()
    {
        return view('add_customer');
    }

    public function adminLogin()
    {
        /*request()->validate([
        'pseudo' => ['required'],
        'password' => ['required'],
        ]);*/

        if(DB::table('admins')->wherePseudo(request('login'))->wherePass(request('password'))->count() > 0)
        {
            $theuser = Admin::where('pseudo', request('login'))->first();
            
            //aller avec les sessions c'est mieux
           
  			session(['theuser' => $theuser]);
			session(['pseudo' => $theuser->pseudo]);
            return view('admin/admin_dashboard');
        }
        else
        {
            return redirect('admin_login')->with('error', 'Utilisateur inexistant');
        }
    }

    public function customerLogin()
    {
        if( $user = (DB::table('customers')->whereUser_email(request('login'))->count() > 0) OR ($user = DB::table('customers')->whereUser_tel(request('login'))->count() > 0))
        {
			//on veut vérifier la correspondance du mot de passe hashé 
			
			
			//vérifier c'est quel ifos il a entré le numéro ou le mail
			$theuser = Customer::where('user_email', request('login'))->first();
			if($theuser)
			{
				//dd(request('password'));
				if($theuser->confirmation_token == null) //vérifier que le token est null
				{
					//c'est un compte qui est validé
					$secret = Customer::where('user_email', request('login'))->first()->password;	
					if(Hash::check(request('password'), $secret))//ca veut dire que le hashage match
					{

						//$nom = ." ".
						//aller avec les sessions c'est mieux
						session(['theuser' => $theuser]);
						session(['nom' => $theuser->firstname]);
						session(['prenom' => $theuser->lastname]);
						return view('customer/espace_client');

					}
					else
					{
						//dd(strval($secret));
						//dd(Hash::make(request('password')));
						return redirect()->route('connexion')->with('error', 'Mot de passe incorrect');

					}

					
				}
				else
				{
					 return redirect()->route('connexion')->with('error', 'Utilisateur inexistant');
				}
			}
			else
			{
				//c'est so numéro tél il a pris
				
				$theuser = Customer::where('user_tel', request('login'))->first();
				if($theuser->confirmation_token == null)
				{
					$secret = Customer::where('user_tel', request('login'))->first()->password;	
					if(Hash::check(request('password'), $secret))//ca veut dire que le hashage match
					{

						session(['theuser' => $theuser]);
						sesion(['nom' => $theuser->firstname]);
						session(['prenom' => $theuser->lastname]);
						return view('customer/espace_client');

					}
					else
					{
						//dd(strval($secret));
						//dd(Hash::make(request('password')));
						return redirect()->route('connexion')->with('error', 'Mot de passe incorrect');

					}

					
				}
				else
				{
					 return redirect()->route('connexion')->with('error', 'Utilisateur inexistant');
				}
			}
			
           
           
        }
        else
        {
			
           return redirect()->route('connexion')->with('error', 'Email inexistant');
        }
       
    }
	
  	public function createCustomer()
	{
		$firstname = request('firstname');
		$lastname = request('lastname');
		$user_tel = request('tel');
		$user_email = request('email');
		$user_password = Hash::make(request('password'));
		
		//NB: ECRIRE UN CODE JS POUR VERIFIER SI LA CONFIRMATION DU MOT DE PASSE ENTTRE CORRESPOND PAS(fait)
		
		//FAIRE AUSSi UN CODE DE SECUITE POUR NE PAS QUE L'UTILISATEUR S'ENREGISTRE PLUSEUR FOIS AVEC LE MEME MAIL c'est deja fait avec verify_exist
		$verify_exist = Customer::where('user_email', $user_email)->first();
		if($verify_exist)
		{
			return redirect('add_customer')->with('error', 'ce mail est déja utilisé');
		}
		else
		{
			$customer = new Customer(['firstname' => $firstname, 'lastname' => $lastname, 'user_tel' => $user_tel,  'user_email' => $user_email, 'password' => $user_password, 'confirmation_token' => str_replace("/", '', bcrypt(Str::random(10)))]);
			$customer->save();
            $geter = Customer::where('user_email', $user_email)->first();
			//envoi du mail de confirmation ; appel de la classe en fait
			//event(new Registered $customer);
			$url = config('app.url').":8000/confirm/".$geter->id."/".$geter->confirmation_token;
			
            $data = ['email' => $user_email, 'id' => $geter->id, 'token' => $geter->confirmation_token, 'url' => $url];
      
            Mail::to($user_email)->send(new RegisterMarckdown($data));
			
			//customer->notify(new RegisterConfirmationNotif());
		
		}

		
		//('add_customer')
		//rediriger l'utisateur vers la case départ 
        //onva vérifier si c'est l'admin qui ajoute un utilisateurr dans ce cas on va rediriger vers sa pateforme
        if( session()->has('pseudo'))
        {
            return redirect('admin_dashboard')->with('success', 'Enregistrement effectué avec succès! Un email a été envoyé à l\'adresse '.$user_email.' Consultez votre boîte mail afin de confirmer cet email');
        }
        else
        {
            return redirect('add_customer')->with('success', 'Enregistrement effectué avec succès! Un email a été envoyé à l\'adresse '.$user_email.' Consultez votre boîte mail afin de confirmer cet email');

        }
	}
	
	public function confirm($id, $token)
	{
		//on va vérifier que l'id et le toen qui est renvoyé exste bel et bien dans la base donc appartient a un utilisateur
		$user =  Customer::where('id', $id)->where('confirmation_token', $token)->first();
		if($user)
		{
			//le champ confirmation_token des utilisateurs confirmé apres enregistrement doit être toujours  vide
			$user->update(['confirmation_token' => null]);
			//$this->guard()->login($user);
			//rediriger vers la page de login avec un message de succes
			return redirect('/login_client')->with('success', 'Votre mail a bien été confirmé! Vous pouvez vous connecter');
		}
		else
		{
			//donc on le retourne encore  a la page de login
			return redirect('/login_client')->with('error', 'ce lien ne semble plus valide');
			
		}
	}
}
