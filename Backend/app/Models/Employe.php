<?php
namespace App\Models;
use DB;

class Employe
{

    function getEmploye()
    {
        $data=DB::table('employe')->get();
        return $data;
      }
     
      
      
      
      function addEmploye($data)
      {
       DB::table('employe')->insert($data); 
      }
      
      
      
      
      
      function deleteEmploye($id)
      {
      DB::table('employe')->where('id',$id)->delete();
      }
      
      
      function updateEmploye($id,$data)
      {
          DB::table('employe')->where('id',$id)->update($data);  
      }
      
      
      function getOneEmploye($id)
      {
          $data=DB::table('employe')->where('id',$id)->get()->first();
          return $data;
      }
      
    }

