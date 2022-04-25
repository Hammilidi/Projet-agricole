<!DOCTYPE html>
<html>
    <head>
        @livewireStyles
        <title>crud live</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>

       

        <div class="container"> 
<!---------------------**********************************-->
<div class="row">
    <div class="col-md-8 col-md-offset-2" >
<!---------------------**********************************-->          
        <div> 
            <br><br><hr>
         <h1>table agriculture</h1>  
         <livewire:agricultures/>  
         <br><br><hr>
         <h1>table employes</h1>
         <livewire:employes/> 
         <br><br><hr>
         <h1>table parcelles</h1>
         <livewire:parcelles/> 
         <br><br><hr>
         <h1>table intervention</h1> 
         <livewire:intervention/>
         <br><br><hr>
         <h1>table tarifs</h1> 
         <livewire:tarifs/>  
         <br><br><hr>
         <h1>tablse data</h1> 
         <livewire:data/>  
        
        
        </div>
        @livewireScripts
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    </div>
<!----------------------->
</div>
    </body>
</html>