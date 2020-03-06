
import React from 'react';
import ReactDOM from 'react-dom';


class App extends React.Component {
  
  constructor(props) {
    super(props); //  calls the constructor of the extended class
                  // which is React.Component
  }

  render() {
    return <h2>Hello, this is the App component</h2>;
  }

}