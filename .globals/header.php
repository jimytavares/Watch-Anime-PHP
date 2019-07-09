<section style=" overflow: hidden; background-color: transparent; position: ; top: 0; width: 100%; z-index:2; height:60px;">
    
    <div class="row" style="height:;">
        
        <!-- Col 01: Menu -->
        <div class="col-md-auto">
            <img src="imagens/titulo.png" style="width:150px; margin-left: 50px; padding-top:5px;" />
        </div>
        
        <!-- Col 02: Logo do Site -->
        <div class="col">
            
            <div class="col-temporada" style="opacity:0.8;">
                <a data-toggle="modal" data-target="#exampleModal">
                    <img src="imagens/temporada-img.png" id="temporada-img"/>

                    <p id="color-nome-temporada" style="padding-top:0px;"> 
                        <i class="fas fa-umbrella-beach" style="font-size:15px;"></i> Julho / Summer / Verão
                    </p>
                </a>
            </div>
            
        </div>
        
        <!-- Col 03: Temporada Atual -->
        <div class="col">
            
            <div class="row row-perfil">
                <div class="col col-perfil">
                    <i class="fas fa-home"></i> Home
                </div>
                <div class="col col-perfil">
                    <i class="fas fa-user-circle"></i> Pefil
                </div>
                <div class="col col-perfil">
                    <i class="fas fa-chart-area"></i> Ranking
                </div>
                <div class="col col-perfil">
                    <i class="fas fa-cannabis"></i> Temporadas
                </div>
                <div class="col col-perfil">
                    <i class="fas fa-sign-out-alt"></i> Logout!
                </div>
            </div>
            
        </div>
        
    </div>
        
        <!-- Linha divisão do menu -->
        <hr style="width:100%; background-color:white; margin-top:-15px;box-shadow: 1px 3px 10px red;"/>
    
        <!-- MODAL: Temporada -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
    
</section>
    