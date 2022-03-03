import React , {useState, useEffect} from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter, Route, Routes} from 'react-router-dom';

import GlobalNav from './GlobalNav';
import Top from './Top';
import About from './About';
import axios from 'axios';

const App = () => {

    const [spots, setSpots] = useState([]);

    useEffect(
        () => {
            axios
            .get( '/api/getspots' )
            .then( (res) => {
                setSpots(res.data.data);
            })
            .catch( (e) => {
                console.log(e);
            })
        },
        []
    );

    return(
        <BrowserRouter>
        <React.Fragment>
            <GlobalNav />
            {
                spots.map( (spot) => {
                    return (
                        <div key={spot.id}>
                            ほに{spot.movie_title} {spot.created_at}
                        </div>
                    );
                })
            }
            <div>ほに</div>
            <Routes>
                {/*完全一致のため、exactを付与*/}
                <Route exact path="/" element={<Top />} /> 
                <Route exact path="/about" element={<About />} />
            </Routes>
        </React.Fragment>
        </BrowserRouter>
    )
}

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}