import React from 'react';
import ReactDOM from 'react-dom';
import PurchaseRankRow from './PurchaseRankRow';

export default class PurchaseRank extends React.Component {
  constructor(props) {
    super(props);
  }

  render() {
    let rows = [];
    let i = 1;

    this.props.rank.forEach(function (rank) {
      rows.push(<PurchaseRankRow key={i} user={rank} />);
      i++;
    });

    return (
      <div className="side-item quiz-richer">
      	<h1>
      		<p>Rank</p>
      		<div className="underline"></div>
      	</h1>

      	<div className="rank-list J_rank_list">
        	<ul className="rank-list-item rank-list-wealth show J_rank_list">
            {rows}
        	</ul>
      	</div>
      </div>
    );
  }
}
