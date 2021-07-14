function doc(){
    if(document.getElementById('documentos').style.display == 'none'){
        document.getElementById('documentos').style.display ='block';
        
    }else{
        document.getElementById('documentos').style.display = "none";
    }
}
function proximo(){
    if(document.getElementById('pessoais').style.display == 'block'){
        document.getElementById('pessoais').style.display ='none';
        document.getElementById('contato').style.display ='block';
        
    }else{
        document.getElementById('pessoais').style.display = "block";
    }
}

function voltar(){
    if(document.getElementById('pessoais').style.display == 'none'){
        document.getElementById('pessoais').style.display ='block';
        document.getElementById('contato').style.display ='none';
        
    }else{
        document.getElementById('pessoais').style.display = "none";
    }
}

function avancar(){
    if(document.getElementById('familia').style.display == 'none'){
        document.getElementById('familia').style.display ='block';
        document.getElementById('contato').style.display ='none';
        
    }else{
        document.getElementById('familia').style.display = "none";
    }
}
function volte(){
    if(document.getElementById('familia').style.display == 'block'){
        document.getElementById('familia').style.display ='none';
        document.getElementById('contato').style.display ='block';
        
    }else{
        document.getElementById('familia').style.display = "block";
    }
}

function back(){
    if(document.getElementById('salve').style.display == 'block'){
        document.getElementById('salve').style.display ='none';
        document.getElementById('familia').style.display ='block';
        
    }else{
        document.getElementById('salve').style.display = "block";
    }
}

function salve(){
    if(document.getElementById('salve').style.display == 'none'){
        document.getElementById('salve').style.display ='block';
        document.getElementById('familia').style.display ='none';
        
    }else{
        document.getElementById('salve').style.display = "none";
    }
}

function excluir(){
    if(document.getElementById('excluir').style.display == 'none'){
        document.getElementById('excluir').style.display ='block';
        document.getElementById('pesquisa').style.display ='none';
        
    }else{
        document.getElementById('excluir').style.display = "none";
    }
}

function retorno(){
    if(document.getElementById('pesquisa').style.display == 'none'){
        document.getElementById('pesquisa').style.display ='block';
        document.getElementById('excluir').style.display ='none';
        
    }else{
        document.getElementById('pesquisa').style.display = "none";
    }
}

