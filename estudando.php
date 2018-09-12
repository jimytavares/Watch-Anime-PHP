<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Meu CSS -->
        <link href="css/Main.css" rel="stylesheet" type="text/css" media="all"/>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        
        <style>
            @import url(https://fonts.googleapis.com/css?family=Roboto:400,500);
            @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css);
            *, *:before, *:after {
              box-sizing: border-box;
            }

            html, body {
              height: 100%;
            }

            body {
              color: #444;
              font-family: 'Roboto', sans-serif;
              font-size: 1rem;
              line-height: 1.5;
            }

            .slider {
              height: 100%;
              position: relative;
              overflow: hidden;
              display: -webkit-box;
              display: -webkit-flex;
              display: -ms-flexbox;
              display: flex;
              -webkit-flex-flow: row nowrap;
                  -ms-flex-flow: row nowrap;
                      flex-flow: row nowrap;
              -webkit-box-align: end;
              -webkit-align-items: flex-end;
                  -ms-flex-align: end;
                      align-items: flex-end;
              -webkit-box-pack: center;
              -webkit-justify-content: center;
                  -ms-flex-pack: center;
                      justify-content: center;
            }
            .slider__nav {
              width: 12px;
              height: 12px;
              margin: 2rem 12px;
              border-radius: 50%;
              z-index: 10;
              outline: 6px solid #ccc;
              outline-offset: -6px;
              box-shadow: 0 0 0 0 #333, 0 0 0 0 rgba(51, 51, 51, 0);
              cursor: pointer;
              -webkit-appearance: none;
                 -moz-appearance: none;
                      appearance: none;
              -webkit-backface-visibility: hidden;
                      backface-visibility: hidden;
            }
            .slider__nav:checked {
              -webkit-animation: check 0.4s linear forwards;
                      animation: check 0.4s linear forwards;
            }
            .slider__nav:checked:nth-of-type(1) ~ .slider__inner {
              left: 0%;
            }
            .slider__nav:checked:nth-of-type(2) ~ .slider__inner {
              left: -100%;
            }
            .slider__nav:checked:nth-of-type(3) ~ .slider__inner {
              left: -200%;
            }
            .slider__nav:checked:nth-of-type(4) ~ .slider__inner {
              left: -300%;
            }
            .slider__inner {
              position: absolute;
              top: 0;
              left: 0;
              width: 400%;
              height: 100%;
              -webkit-transition: left 0.4s;
              transition: left 0.4s;
              display: -webkit-box;
              display: -webkit-flex;
              display: -ms-flexbox;
              display: flex;
              -webkit-flex-flow: row nowrap;
                  -ms-flex-flow: row nowrap;
                      flex-flow: row nowrap;
            }
            .slider__contents {
              height: 100%;
              padding: 2rem;
              text-align: center;
              display: -webkit-box;
              display: -webkit-flex;
              display: -ms-flexbox;
              display: flex;
              -webkit-box-flex: 1;
              -webkit-flex: 1;
                  -ms-flex: 1;
                      flex: 1;
              -webkit-flex-flow: column nowrap;
                  -ms-flex-flow: column nowrap;
                      flex-flow: column nowrap;
              -webkit-box-align: center;
              -webkit-align-items: center;
                  -ms-flex-align: center;
                      align-items: center;
              -webkit-box-pack: center;
              -webkit-justify-content: center;
                  -ms-flex-pack: center;
                      justify-content: center;
            }
            .slider__image {
              font-size: 2.7rem;
                  color: #2196F3;
            }
            .slider__caption {
              font-weight: 500;
              margin: 2rem 0 1rem;
              text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
              text-transform: uppercase;
            }
            .slider__txt {
              color: #999;
              margin-bottom: 3rem;
              max-width: 300px;
            }

            @-webkit-keyframes check {
              50% {
                outline-color: #333;
                box-shadow: 0 0 0 12px #333, 0 0 0 36px rgba(51, 51, 51, 0.2);
              }
              100% {
                outline-color: #333;
                box-shadow: 0 0 0 0 #333, 0 0 0 0 rgba(51, 51, 51, 0);
              }
            }

            @keyframes check {
              50% {
                outline-color: #333;
                box-shadow: 0 0 0 12px #333, 0 0 0 36px rgba(51, 51, 51, 0.2);
              }
              100% {
                outline-color: #333;
                box-shadow: 0 0 0 0 #333, 0 0 0 0 rgba(51, 51, 51, 0);
              }
            }


        </style>
        
    </head>
    
    <body>
        
        
        <div class="slider">
            
          <input type="radio" name="slider" title="slide1" checked="checked" class="slider__nav"/>
          <input type="radio" name="slider" title="slide2" class="slider__nav"/>
          <input type="radio" name="slider" title="slide3" class="slider__nav"/>
          <input type="radio" name="slider" title="slide4" class="slider__nav"/>
            
          <div class="slider__inner">
            <div class="slider__contents">
              <i class="slider__image fa fa-codepen"></i>
              <h2 class="slider__caption">ceodepen</h2>
              <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
            </div>
            <div class="slider__contents">
              <i class="slider__image fa fa-newspaper-o"></i>
              <h2 class="slider__caption">newspaper-o</h2>
              <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
            </div>
            <div class="slider__contents"><i class="slider__image fa fa-television"></i>
              <h2 class="slider__caption">television</h2>
              <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
            </div>
            <div class="slider__contents"><i class="slider__image fa fa-diamond"></i>
              <h2 class="slider__caption">diamond</h2>
              <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
            </div>
          </div>
            
        </div>
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>    
</html>