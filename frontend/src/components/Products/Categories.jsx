import './Categories.css';

export default () =>
{
    
    return (
        <section className="mt-3">                
            <div className="d-flex justify-content-around categories">
                <button className="btn btn-outline-info" onclick="show_all()">Todos</button>
                <button className="btn btn-outline-info" onclick="show_category('microondas')">Microondas</button>
                <button className="btn btn-outline-info" onclick="show_category('geladeira')">Geladeiras</button>
                <button className="btn btn-outline-info" onclick="show_category('lavaroupa')">Lava-roupas</button>
                <button className="btn btn-outline-info" onclick="show_category('fogão')">Fogões</button>
                <button className="btn btn-outline-info" onclick="show_category('lavalouca')">Lava-louças</button>
            </div>
        </section>
    );
};