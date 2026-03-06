import React from "react";
import { Link } from "react-router-dom";
import "./Navbar.css";

export default function Navbar() {
	return (
		<div className="Navbar">
			<Link to="/"><img src="/images/about.png"></img>About&nbsp;us</Link>
			<Link to="/watches"><img src="/images/watch.png"></img>Watches</Link>
			<Link to="/order"><img src="/images/order.png"></img>Order</Link>
		</div>
	);
}
