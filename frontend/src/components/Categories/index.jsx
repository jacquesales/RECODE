import './Categories.css';


// exibindo todos os produtos
let showAllProducts = () => {
    let elements = document.getElementsByClassName("box-product");

    for(let i = 0; i < elements.length; i++) {
        elements[i].style = "display: block";
    }    
};

// filtrando por categoria
function showCategory(category) {
    let elements = document.getElementsByClassName("box-product");

    for(let i = 0; i < elements.length; i++) {
        if (category === elements[i].id)
            elements[i].style = "display: block";
        else 
            elements[i].style = "display: none";
    }
};

const Categories = () =>
{
    
    return (
        <section className="mt-3">                
            <div className="d-flex justify-content-around categories">
                <button className="btn btn-outline-info" onClick={showAllProducts}>Todos</button>
                <button className="btn btn-outline-info" onClick={() => showCategory('microondas')}>Microondas</button>
                <button className="btn btn-outline-info" onClick={() => showCategory('geladeira')}>Geladeiras</button>
                <button className="btn btn-outline-info" onClick={() => showCategory('lavaroupa')}>Lava-roupas</button>
                <button className="btn btn-outline-info" onClick={() => showCategory('fogão')}>Fogões</button>
                <button className="btn btn-outline-info" onClick={() => showCategory('lavalouca')}>Lava-louças</button>
            </div>
        </section>
    );
}

export default Categories;