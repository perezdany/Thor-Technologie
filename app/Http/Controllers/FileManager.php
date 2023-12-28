<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class FileManager extends Controller
{
    //Celui gère les manipulations de fichier


    public function UplaoadFile(Request $request)
    {
        //fonctio de téléchargement et d'enregistrement de fichier dans la base
        $file_name = $request->file->getClientOriginalName();
        if($file_name == null)
        {
            $filePath = 'uploads/' . $file_name;
            //$path = Storage::disk('local')->put($filePath, file_get_contents($request->file));
       
            //$path = $request->file('file')->store('uploads');
        
            $path = $request->file('file')->storeAs(
                'uploads', $file_name
            );
        }
        else
        {
            return redirect('admin_dashboard')->with('error', 'Vous devez choisir un fichier');
        }
        $filePath = 'uploads/' . $file_name;
        //$path = Storage::disk('local')->put($filePath, file_get_contents($request->file));
       
        //$path = $request->file('file')->store('uploads');
        
        $path = $request->file('file')->storeAs(
    'uploads', $file_name
);

        //dd($file_name);

        //$path = "storage/".$filePath;
        //dd($path);
        //mettre la requête pour stocker ca dans la base
        $affected = DB::table('requestings')->where('id_requesting', request('id'))
              ->update(['file_store' => $filePath ]);


        return redirect('admin_dashboard')->with('success', 'Modification effectuée');
    }

    public function DownloadFile(Request $request)
    {
        //return Storage::download($request->file);
        //dd($request->file);

        //dd(Storage::disk('local')->exists($request->file) );
        if(Storage::disk('public')->exists($request->file))
        {
            return Storage::download($request->file);
        }
        else
        {
            return redirect('espace_client')->with('error', 'Le fichier n\'existe pas');
        }
    }
}
