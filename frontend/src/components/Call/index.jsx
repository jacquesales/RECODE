import Email from '../../assets/images/general/email.png'
import Whatsapp from '../../assets/images/general/whatsapp.png'

const Call = () =>
{
    
    return (
        
        <div className="text-center">
            <div className="row">
                <div className="col-sm-6">
                    <div className="card">
                        <div className="card-body">
                            <img src={Email} alt="Email"/>
                            <p>contato@fullstackeletro.com</p>
                        </div>
                    </div>
                </div>

                <div className="col-sm-6">
                    <div className="card">
                        <div className="card-body">
                            <img src={Whatsapp} alt="Whatsapp"/>
                            <p>(11) 99999-9999</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
    
};

export default Call;
