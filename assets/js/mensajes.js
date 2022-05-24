function filtrar(mensaje){
if (mensaje==='resueltos') {
    let elementosResueltos= document.getElementsByName('resuelto');
    let elementosSin= document.getElementsByName('sinResolver');
    
    for(let i in elementosResueltos){
        elementosResueltos[i].className='text-success';
        
    }
    for(let i in elementosSin){
        elementosSin[i].className='d-none';        
    }
}
if (mensaje==='sinResolver') {
    let elementosResueltos= document.getElementsByName('resuelto');
    let elementosSin= document.getElementsByName('sinResolver');
    
    for(let i in elementosResueltos){
        elementosResueltos[i].className='d-none';
        
    }
    for(let i in elementosSin){
        elementosSin[i].className='';        
    }

}

if (mensaje==='todos') {
    let elementosResueltos= document.getElementsByName('resuelto');
    let elementosSin= document.getElementsByName('sinResolver');
    
    for(let i in elementosResueltos){
        elementosResueltos[i].className='text-success';
        
    }
    for(let i in elementosSin){
        elementosSin[i].className='';        
    }

}
}