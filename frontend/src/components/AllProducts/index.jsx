import React from 'react';
import { useState, useEffect } from 'react';

import './AllProducts.css'

const AllProducts = () =>
{

    const [product, setProducts] = useState([]); 

    useEffect(() => {
        async function fetchData(){
            const returnPage = await fetch("http://localhost:3500/products")
            const data = await returnPage.json()
            setProducts(data);
        }
        fetchData();
        
    }, []); 

    
    return (        

            <div className="container my-3">   
                          
                <div className="mt-3 row row-cols-3 text-center">
                    {product.map((item) => {

                        return (
                        
                            <div className="all-products">
                                <div key={item.idproduto} id={item.categoria} className="box-product">                                                                   
                                    <img src={item.imagem} alt={item.categoria}/>                                    
                                    <br/>
                                    <p className="description">{item.descricao}</p>
                                    <hr/>
                                    <p className="previousvalue">{item.preco_anterior}</p>
                                    <p className="currentvalue">{item.preco_final}</p>
                                </div>
                            </div>
                        );
                    })}
                </div>
            </div>        
    );
};

export default AllProducts;