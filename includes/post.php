<?php

/*
 * Post alle functies hier
 * 
 * Naam: Ramon Kerpershoek
 * Datum: 6-12-2016
 * 
 */
 
 if (Input::has('save')){
 	If	(Input::get('username')==''	||
 		Input::get('password')==''	||
 		Input::get('f_name')==''	||
 		Input::get('l_name')==''	||
 		Input::get('rol')=='choose'	||
 		Input::get('rol')==''		||
 		Input::get('join_date')=='')
 	{
 		echo("Niet alles is ingevuld");
 	}else{
 		accountManagement::register();
 	}
 	
 }
 

