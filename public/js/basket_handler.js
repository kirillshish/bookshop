window.onload = function(){
    let buttons = document.getElementsByClassName("basket_handler");
    for(let i = 0; i<buttons.length; i++){
        buttons[i].addEventListener('click', sendRequest);
    }

    function sendRequest(event) {
        event.preventDefault();
        let id = event.target.dataset.id;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: '/basket',
            data: {id:id},
        });
        console.log(id);
    }
}