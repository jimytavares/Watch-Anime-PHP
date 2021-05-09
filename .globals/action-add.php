<?php
    if(isset($_GET['success'])){

        ?><script type="text/javascript"> swal({ icon: "success", text: "Adicionado a lista!", }); </script><?php

    }elseif(isset($_GET['error']) && $_GET['error'] == 'register_wrong'){

        ?><script type="text/javascript">alert('Deu algum erro aí ao tentar cadastrar, usuário ou endereço de correio eletrônico pertencem ao meu PAI! (OOO PAI oO)')</script><?php
    }elseif(isset($_GET['recsuccess'])){

        ?><script type="text/javascript">alert('E-mail de recuperação enviado com sucesso')</script><?php
    }elseif(isset($_GET['recfail'])){

        ?><script type="text/javascript">alert('Ocorreu algum erro')</script><?php
    }elseif(isset($_GET['addEp'])){

        ?><script type="text/javascript"> swal({ icon: "success", text: "Episódio Assistido!", }); </script><?php
    }elseif(isset($_GET['errorEp'])){

        ?><script type="text/javascript"> swal({ icon: "error", text: "Ops, errei!", }); </script><?php
    }elseif(isset($_GET['delAnime'])){

        ?><script type="text/javascript"> swal({ icon: "warning", text: "Anime removido com sucesso!", }); </script><?php
    }
?>