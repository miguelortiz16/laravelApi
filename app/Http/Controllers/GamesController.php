<?php

namespace App\Http\Controllers;

use App\Models\games;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index(){
  $game= games::all();
  return $game;


    }

    public function show($id){
     $game= games::find($id);
    return $game;


    }

    public function store(Request $request){
     

     $user= $request->form;
     $game = new  games();
     $game->id= $user["idGames"];
     $game->idGame= $user["idGames"];
     $game->arrayGame=   $request->board;
     $game->turn= "1";
     $game->player1= $user["name"];
     $game->player2= "2";
     $game->save();
     return  $game;


              }

    public function updateUser(Request $request){
      $user= $request->form;
      $user["idGames"];
      $game= games::find($user["idGames"]);
      $game->player2= $user["name"];
      $game->save();
  
      return  $game;


     }

     public function getGame(Request $request){
      $user= $request->form;
      $user["idGames"];
      $game= games::find($user["idGames"]);
     
  
      return   $game["arrayGame"];


     }


     public function updateGame(Request $request){
      $user= $request->form;
      $user["idGames"];
      $game= games::find($user["idGames"]);

      $game->arrayGame=   $request->board;

      $game->save();
  
      return  $game;


     }
      

                         
}
