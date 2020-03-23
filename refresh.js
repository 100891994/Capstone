let counter = 1;
setInterval(()=> {
    //document.querySelector('h1').innerText = counter;
    document.querySelector('h1')
    counter++;
    if(counter == 3)
    {
        window.location.reload(true);
		localStorage.clear();
    }
}, 1000);
