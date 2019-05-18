<?php 
function mybio()
{
	$data =[
	"name" => "Septian Feri Ferdinan",
	"address" => "Jl. Kiaracondong, Bandung, West Java, Indonesia",
	"hobbies"  => ["coding","watching movie"],
	"is_married" => false,
	"school" => ["highSchool" => "SMK Medikacom Bandung" , 
				"university" => null ],
	"skills" =>[ [ "name"  => "HTML,CSS,Bootstrap" ,"score" => "80" ],
				 [ "name"  => "PHP,Javascript" ,"score" => "78" ],
				 [ "name"  => "CodeIgniter" ,"score" => "70" ] 
				]
	
		];		
	print(json_encode($data));
}
mybio();
?>