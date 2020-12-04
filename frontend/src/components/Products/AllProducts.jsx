import React from 'react';
import { useEffect } from 'react';

import './AllProducts.css'

export default () =>
{

    const [product, setProducts] = React.useState([]); 

    useEffect(async () => {
        const url = "http://localhost/RECODE/backend/Products.php";
        const response = await fetch(url);
        setProducts(await response.json());
    }, []);

    
    return (        

            <div className="container my-3">   
                          
                <div className="mt-3 row row-cols-3 text-center">
                    {product.map((props) => {

                        return (
                        
                            <div className="all-products">
                                <div key={props.id} className="box-product">                                                                   
                                    <img src={require(`./images/${props.imagem}`).default} alt="Imagem de Produtos"/>                                    
                                    <br/>
                                    <p className="description">{props.descricao}</p>
                                    <hr/>
                                    <p className="previousvalue">{props.precoAnterior}</p>
                                    <p className="currentvalue">{props.precoFinal}</p>
                                </div>
                            </div>
                        );
                    })}
                </div>
            </div>        
    );
};