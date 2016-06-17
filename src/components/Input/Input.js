import React, { Component } from 'react';
import classNames from 'classnames';

export default class InputCms extends Component {

	constructor(props) {
		super(props);
		this.state = {
			isError: false,
			isValid: false,
			selectOnFocus: false,
			type: 'text'
		};
	}

	focus() {
		this.refs.textField.focus();
	}

	render() {
		const { className, selectOnFocus } = this.props;
		const classes = classNames( className, {
			'form-text-input': true,
			'is-error': this.props.isError,
			'is-valid': this.props.isValid
		} );

		return (
			<input
				{ ...this.props }
				ref="textField"
				autocomplete="address-level4"
				className={ classes }
				onClick={ selectOnFocus ? this.selectOnFocus : null } />
		);
	}

	selectOnFocus( event ) {
		event.target.select();
	}

}