import React from 'react';
import ReactDOM from 'react-dom';

export default class PurchaseRankRow extends React.Component {
  constructor(props) {
    super(props);
  }

  render() {
    let classN = 'icon-rank-' + (this.props.key + 1);

    if (this.props.key >= 3)
    {
      classN = 'icon-rank-4';
    }

    return (
      <li>
        <div className="rank-item-left">
          <i className={ 'icon-rank ' +  classN }>{ this.props.key }</i>
          <span className="rank-user-name">
              { this.props.user.userName }
          </span>
          <div className="rank-user-headimg">
            <i className={ 'icon-img-rank ' + classN }>{ this.props.key }</i>
            <img src={ this.props.user.header } />
          </div>
        </div>
        <div className="rank-item-right">
          <span className="rank-user-data">{ this.props.user.golds }金币</span>
        </div>
      </li>
    )
  }
}
