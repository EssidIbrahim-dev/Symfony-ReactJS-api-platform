import React from 'react';
import logo from './tel.png';
import './App.css';
import { HydraAdmin, hydraClient, fetchHydra } from '@api-platform/admin';
const apiPrefix = '/api';

const customFetch = (url, options = {}) => {
   
    url = url.replace(`${apiPrefix}${apiPrefix}/`, `${apiPrefix}/`);
    return fetchHydra(url, options);
};
function App() {
  return (
    <div className="App">
      
        
        
       
        <HydraAdmin entrypoint="http://127.0.0.1:8000/api"  />
      
    </div>
  );
}

export default App;
