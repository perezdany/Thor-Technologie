<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Models\Customer;
use App\Models\Admin;
use App\Models\Requesting;
use DB;

class ControllerRequesting extends Controller
{
    //Controlleur qui gère les demandes 

    public function customerEditRequestForm()
    {
        return view('customer/edit_request');
    }

    public function adminUpdateReqForm()
    {
        return view('admin/update_request');
    }

    public function addRequest()//ici c'est l'espace client
    {
    	if(request('id'))//ca veut dire que c'est pour supprimer
    	{
    		DB::table('requestings')->where('id_requesting', '=', request('id'))->delete();

    		return view('customer/espace_client');
    	}
    	else
    	{

			//dd(request('nom'));
			$object = request('object');
			$device = strval(request('device'));
			$firstname = request('firstname');
			$lastname =  request('lastname');
			$requesting_date = date('Y-m-d');
			$requesting_hr  = date('H:i:s');
			$id_requesting = strval("R".date('Ymd_His')."");
			$number = intval(request('number'));
			$status = 0;
			

			//dd($id_requesting);
			//dd($number);
			$get_user = Customer::where('firstname', $firstname)->where('lastname', $lastname)->first();
			//var_dump($get_user);

			if($get_user)
			{
				$id_user = $get_user->id;

				$add = new Requesting(['id_requesting' => $id_requesting, 'object' => $object, 'device' => $device, 'requesting_date' => $requesting_date, 'requesting_hr' => $requesting_hr, 'number' => $number, 'status' => $status, 'id' =>  $id_user]);
				//sdd($add);
				$add->save();

				return redirect('espace_client')->with('success', 'Enregistrement effectué avec succès');

			}
			else
			{
				return redirect('espace_client')->with('error', 'vous avez entré nom ou un prénom incorrect: veillez a ne pas modifier les champs déja remplis');
			}
    	}
		
            
        
    }
	
	
	public function createRequest() //on est dans l'espace admin
	{
		$object = request('object');
		$device = request('device');
		$requesting_date = date('Y-m-d');
		$requesting_hr  = date('H:i:s');
		$id_requesting = "R".date('Y-m-d H:i:s');
		$status = 0;

		//l'utilsateur concerné, le rechercher
		$nom = request('firstname');
		$prenom = request('lastname');
		$get_user = Customer::whereFirstnameAndLastname($nom, $prenom)->get();

		if($get_user->count() == 0)
		{
			//$message = "";
			return redirect('add_request')->with('error', 'ATTENTION! L\'utilisateur n\'existe pas, vous devez d\'abord ajouter ce utilisateur!');
		}
		else //y a un utilisateur
		{
			
			$get_user = Customer::whereFirstnameAndLastname($nom, $prenom)->first();
			$id_user = $get_user->id;
			$add = new Requesting(['id_requesting' => $id_requesting,'object' => $object,'device' => $device,'requesting_date' => $requesting_date,'requesting_hr' => $requesting_hr, 'number' => $number, 'status' => $status, 'id' =>  $id_user]);
			$add->save();

			return redirect('add_request')->with('success', 'Enregistrement effectué avec succès');

		}
	}

    public function updateRequest()
    {
        if(request('status') == null)//ca veut dire que c'est pas l'admn qui est en tran de faire une modif
        {
        	$affected = DB::table('requestings')->where('id_requesting', request('id'))
              ->update(['device' => request('device'), 'object' => request('object'), 'number' => request('number')]);
            return redirect('espace_client')->with('success', 'Modification effectuée');
        	
        }
        else //c'est l'admin
        {
        	//dd(request('id'));
        	$affected = DB::table('requestings')->where('id_requesting', request('id'))
              ->update(['device' => request('device'), 'object' => request('object'), 'status' => request('status'), 'number' => request('number')]);
              var_dump($affected);
            return redirect('admin_dashboard')->with('success', 'Modification effectuée');
        }
    }

    public function inProgressRequests()
    {
    	//fonction qui affiche les requetes en cours
    	$req = Customer::join('requestings', 'requestings.id', '=', 'customers.id')->where('requestings.status', '0')->get(['customers.firstname', 'customers.lastname', 'customers.user_tel', 'requestings.device', 'requestings.object', 'requestings.requesting_date', 'requestings.id_requesting']);
    	return $req;
    }

     public function myRequests($user)
    {
    	//fonction qui affiche les requetes en cours du client
    	$req = Customer::join('requestings', 'requestings.id', '=', 'customers.id')->where('requestings.status', '0')->where('requestings.id', $user->id)->get(['customers.firstname', 'customers.lastname', 'customers.user_tel', 'requestings.device', 'requestings.object', 'requestings.requesting_date', 'requestings.id_requesting', 'requestings.status', 'requestings.number']);
    	return $req;
    }

    public function deleteRequestings()
    {
    	//supression poar l'admin
    	//dd(request('id'));
    	DB::table('requestings')->where('id_requesting', '=', request('id'))->delete();

    	return view('admin/admin_dashboard');
    }

    public function deleteMyRequestings()
    {
    	//supression poar l'utilisateur
    }
}
