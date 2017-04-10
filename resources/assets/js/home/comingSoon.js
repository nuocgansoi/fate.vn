import React from 'react';
import ReactDOM from 'react-dom';
const RULE_REQUIRED = 'required';
class ComingSoon extends React.Component {
    constructor() {
        super();
        this.state = {
            data: {email: '', age: ''},
            errors: [],
            isLoading: false,
            isSuccess: false,
        }
    }

    subscribe(event) {
        event.preventDefault();
        this.validate(RULE_REQUIRED, 'email', this.state.data.email);
        this.validate(RULE_REQUIRED, 'age', this.state.data.email);
        console.log(this.state.errors.length);
        if (this.state.errors.length || this.state.isLoading) return;
        this.setState({isLoading: true});
        axios.post('/subscribe', this.state.data).then(() => {
            this.setState({
                isLoading: true,
                isSuccess: true,
            })
        }).catch((error) => {
            this.setState({isLoading: false});
            console.log(error);
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
                }
                else {
                    if (value !== '') errors.splice(errorIndex, 1);
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

    getMessage(field) {
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
                    <div className="form-group text-left">
                        <div className="label float-left">{trans('string.your_email')}</div>
                        {this.getMessage('email')}
                        <input onChange={this.onDataChange.bind(this, 'email')} type="text" name="email"
                               className="form-control"/>
                    </div>
                    <div className="form-group text-left">
                        <div className="label float-left">{trans('string.your_age')}</div>
                        {this.getMessage('age')}
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
                        <div className="social-button"><i className="fa fa-facebook" aria-hidden="true"/></div>
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