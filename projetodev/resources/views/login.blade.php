
<!DOCTYPE html>

<html lang="pt-br">

<!-- Head -->

<head>
  <title>Login - Petty Banho e tosa</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="                                    " />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
</head>
 

    <body onload="quadro()">
        
        <div class="container-fluid d-flex flex-column justify-content-center align-items-center">
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-8 col-sm-12 col-xs-12 ">
                <div style="margin-top: 5%" class="p-2 bg-light text-white form-signin card p-4 border-rounded rounded-3 shadow-lg text-center">
        
                    <form id="form_login" method="POST" action="/logar">
                    @csrf                                            
                    <img class="mb-4 img-fluid w-50" src="/images/Como-dar-banho-no-cachorro-Guia-completo-passo-a-passo.png" alt="cachorros numa banheira">
        
                    <h1 class="h3 mb-5 fw-bold text-warning ">PETTY</h1>
                   
                                      
                    <div class="form-floating text-muted">
                        <input name="email" required type="email" class="form-control" id="floatingInput" placeholder="Email">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating mt-2 text-muted">
                        <input required name="senha" type="password" class="form-control" id="floatingPassword" placeholder="Senha">
                        <label for="floatingPassword">Senha</label>
                    </div>
                
                    <button class="w-100 mt-5 btn btn-lg btn-warning" type="submit">Fazer Login</button>
                    <p class="mt-5 mb-3 text-muted">© Petty Banho e tosa:
                        <a style="text-decoration: none;" class="text-muted" href="">Desenvolvido por
                        <strong>
                            <a class="text-muted" target="_blank"href="https://www.linkedin.com/in/rafael-de-souza-7a96a41a6">Montségur Tech</a>
                        </strong>
                    </a>
                </p>
                    </form>
                </div>
            </div>
        </div>
  
    </body>
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    function quadro(){                 
  
        setTimeout(function() {
         $('#msg').fadeOut('slow');
        }, 4000);
        

        setTimeout(function() {
         $('#msg2').fadeOut('slow');
        }, 4000);
        }

        

</script>


</html>


