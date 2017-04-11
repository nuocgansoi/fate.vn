import React from 'react';
import ReactDOM from 'react-dom';
const RULE_REQUIRED = 'required';
const RULE_MORE_THAN_18 = 'more_than_18';
class ComingSoon extends React.Component {
    constructor() {
        super();
        this.state = {
            data: {email: '', age: ''},
            errors: [],
            isLoading: false,
            isSuccess: false,
            message: '',
        }
    }

    subscribe(event) {
        event.preventDefault();
        this.validate(RULE_REQUIRED, 'email', this.state.data.email);
        this.validate(RULE_REQUIRED, 'age', this.state.data.age);
        this.validate(RULE_MORE_THAN_18, 'age', this.state.data.age);
        if (this.state.errors.length || this.state.isLoading) return;
        this.setState({isLoading: true});
        axios.post('/subscriber', this.state.data).then((response) => {
            this.setState({
                isLoading: false,
                isSuccess: false,
                message: {
                    type: response.data.message.type,
                    body: response.data.message.body,
                }
            });
        }).catch((error) => {
            this.setState({
                message: {
                    type: 'danger',
                    body: Object.values(error.response.data)[0][0],
                },
                isLoading: false
            });
        });
    }

    validate(rule, field, value) {
        let errors = this.state.errors;
        let errorIndex = errors.findIndex(error => error.field === field);
        switch (rule) {
            case RULE_REQUIRED:
                if (value === '' && errorIndex === -1) {
                    let newError = {
                        field: field,
                        msg: trans('message.' + field + '_is_require'),
                    };
                    errors.push(newError);
                } else {
                    if (value !== '') errors.splice(errorIndex, 1);
                }
            case RULE_MORE_THAN_18:
                if (value < 18) {
                    let newError = {
                        field: field,
                        msg: trans('message.' + field + '_is_less_than_18'),
                    };
                    errors.push(newError);
                } else {
                    if (value > 18) errors.splice(errorIndex, 1);
                }

        }

        this.setState({errors});
    }

    onDataChange(type, event) {
        let data = this.state.data;
        data[type] = event.target.value.trim();
        this.validate(RULE_REQUIRED, type, event.target.value.trim());
        this.setState({data});
    }

    getMessage() {
        if (this.state.message) {
            return (
                <div className="form-group">
                    <div className={'text-left alert alert-' + this.state.message.type}>{this.state.message.body}</div>
                </div>
            );
        }

        return '';
    }

    getErrorMessage(field) {
        let errorIndex = this.state.errors.findIndex(error => error.field === field);
        if (errorIndex === -1) return '';

        return (
            <div className="text-danger alert-text float-right">{this.state.errors[errorIndex].msg}</div>
        );
    }

    render() {
        return (
            <div className="right-content text-center">
                <div className="header">
                    <h4 className="title">{trans('string.register') }</h4>
                    <div className="description">{trans('string.receive_soon') }</div>
                </div>
                <form className="subscribe-form" onSubmit={this.subscribe.bind(this)}>
                    {this.getMessage()}
                    <div className="form-group text-left">
                        <div className="label float-left">{trans('string.your_email')}</div>
                        {this.getErrorMessage('email')}
                        <input onChange={this.onDataChange.bind(this, 'email')} type="text" name="email"
                               className="form-control"/>
                    </div>
                    <div className="form-group text-left">
                        <div className="label float-left">{trans('string.your_age')}</div>
                        {this.getErrorMessage('age')}
                        <input onChange={this.onDataChange.bind(this, 'age')} type="number" name="age" className="form-control"/>
                    </div>
                    <div className="form-group">
                        <button className="btn btn-secondary btn-block btn-fate" type="submit">{trans('string.register')}</button>
                    </div>
                    <div className="form-group">
                        <span className="for-18">{trans('string.for_18')}</span>
                    </div>
                </form>
                <div className="footer">
                    <div className="float-left text-left">
                        <p>{trans('string.description_contact_form')}</p>
                        <p className="text-muted">{trans('string.contact_email')}</p>
                    </div>
                    <div className="float-right">
                        <div onClick={() => window.location = 'https://www.facebook.com/fate.vn'} className="social-button">
                            <i className="fa fa-facebook" aria-hidden="true"/>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

ReactDOM.render(
    <ComingSoon/>,
    document.getElementById('contact-form')
);