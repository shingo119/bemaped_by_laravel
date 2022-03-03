import React from 'react';
import ReactDom from 'react-dom';
import { Index } from "./components/Index";

if (document.getElementById('example')){
    ReactDom.render(<example />, document.getElementById('example'));
}