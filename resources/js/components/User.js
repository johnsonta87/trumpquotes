import React, { Component, useState } from 'react';
import ReactDOM from 'react-dom';

// Unused Component
class User extends Component {
  state = {
    name: '',
    errorMessage: ''
  }

  handleChange = ({ target }) => {
    this.setState({ [target.name]: target.value });

    const name = event.target.value;
    const url = this.props.url;

    // axios.get(url + 'personalized?q=' + name)
    //   .then(res => {
    //     console.log(res);
    //     this.setState({ res });
    //   })
    //   .catch(error => {
    //     this.setState({ errorMessage: error.message });
    //     console.error('There was an error!', error);
    //   });
  }

  render() {
    return (
      <React.Fragment>
        <h4>Hi, { this.state.name }</h4>
        <input className="styled-input" type="text" name="name" placeholder="Enter name" onChange={this.handleChange} />
      </React.Fragment>
    );
  }
}

export default User;

if (document.getElementById('user')) {
  ReactDOM.render(<User url='https://api.whatdoestrumpthink.com/api/v1/quotes/' />, document.getElementById('user'));
}
