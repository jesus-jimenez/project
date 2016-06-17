import React from 'react';
import { render } from 'react-dom';
import Main from './components/Input';

const MainApp = document.getElementById('main');
render(<Main name="login" autocomplete="off"
								placeholder={ 'Username or email address' }
								 />, MainApp);
