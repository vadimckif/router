<?php
class Router
{
	public function parseRequest()
	{
		$uri=trim($_SERVER['REQUEST_URI'],'/');

		if(empty($uri))
		{
			$class =ROOT_DIR."/Site";
			 require($class . '.php');
             $obg=new SiteController();
	        $obg->index();
		}
		else
			
			{
			
				$uries=explode('/',$uri);
				
				if(count($uries)<=3)
				{
				$this->parse($uries);
				}
				else
				{
					echo "oshibka";
				}
				
			}
		

   
	}
	public function parse($uries)
	{
		function upFirstLetter($str, $encoding = 'UTF-8')
{
    return mb_strtoupper(mb_substr($str, 0, 1, $encoding), $encoding)
    . mb_substr($str, 1, null, $encoding);
}
 

		
		
		
		$root_dir=ROOT_DIR."/";
		$count=count($uries);
		switch($count)
		{
			case "1":
			$class=upFirstLetter($uries[0]);
			
			$class=preg_replace('/\?(.*)$/','',$class);
			
			if(is_file($root_dir.$class.".php"))
			{
				require($root_dir.$class.".php");
				$class= $class."Controller";
				$obj=new $class;
				$obj->index();
			}
			else
			{
				echo "oshibka404";
			}
			
			break;
			
			
			case "2":
			$folder=$uries[0];
			//debug($uries);
			if(file_exists($root_dir.$folder))
			{
				$class=upFirstLetter($uries[1]);
				$class=preg_replace('/\?(.*)$/','',$class);
				       if(is_file($root_dir.$folder."/".$class.".php"))
			{
				
				require($root_dir.$folder."/".$class.".php");
				$class= $class."Controller";
				$obj=new $class;
				
				
				$obj=new $class;
				$obj->index();
			}
			else
			{
				echo "oshibka404";
			}
			
			
				
				
				
				
				
				
				
				
				
				
				//echo "est";
			}
			else
			{
				$class=upFirstLetter($uries[0]);
			     $method=preg_replace('/\?(.*)$/','',$uries[1]);
				
			$class=preg_replace('/\?(.*)$/','',$class);
				
				if(is_file($root_dir.$class.".php"))
			{
				require($root_dir.$class.".php");
				$class= $class."Controller";
				$obj=new $class;
				
				if(method_exists($obj,$method))
				{
				$obj->$method();
				}
				else
				{
					
					echo "takogo metoda net";
				}
			}
			else
			{
				echo "oshibka404";
			}
				
			}
						
			
			
			
			
			
			//debug($uries);
			
			
			
			
			
			
			
			break;
			
			
			case "3":
		$folder=$uries[0];
        $class=$uries[1];
         $method=$uries[2];
		  $method=preg_replace('/\?(.*)$/','',$method);
		 if(file_exists($root_dir.$folder))
			{
			$folder=$root_dir.$folder."/";
			
			$class=upFirstLetter($uries[1]);
			    if(is_file($folder.$class.".php"))
				{
					require($folder.$class.".php");
				$class= $class."Controller";
				$obj=new $class;
				
				if(method_exists($obj,$method))
				{
				$obj->$method();
				}
				else
				{
					
					echo "takogo metoda net";
				}
					
					
					
				}
				else
				{
					echo "oshibka404";
				}
				
			
			
			

			
			}
			else
			{
				echo "oshibka404";
			}
			
			
			
			
			
			
			
			
			
			break;
		}
	}
	
	
	
}