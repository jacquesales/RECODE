// função | filtrando por categoria
function show_category(category) {
    let elements = document.getElementsByClassName('box-product');

    for(let i = 0; i < elements.length; i++) {
        if (category == elements[i].id)
            elements[i].style = "display: block";
        else 
            elements[i].style = "display: none";
    }
};

// arrow function | exibindo todos os produtos
let show_all = () => {
    let elements = document.getElementsByClassName('box-product');

    for(let i = 0; i < elements.length; i++) {
        elements[i].style = "display: block";
    }    
};

// funções com evento mouse | ampliando a imagem
function mouseOver(image) {
    if (image.width == 350)
        image.width = 200;
    else
        image.width = 350;
};

function mouseOut(image) {
    if (image.width == 350)
        image.width = 200;
    else
        image.width = 350;
};