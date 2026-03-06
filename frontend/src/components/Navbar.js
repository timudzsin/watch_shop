import React from "react";
import { Link } from "react-router-dom";
import "./Navbar.css";

export default function Navbar() {
	return (
		<div className="Navbar">
			<Link to="/user/about"><img src="/images/about.png"></img>About&nbsp;us</Link>
			<Link to="/user/watches"><img src="/images/watch.png"></img>Watches</Link>
			<Link to="/user/cart"><img src="/images/cart.png"></img>Cart</Link>
			<Link to="/user/account"><img src="/images/account.png"></img>Account</Link>
		</div>
	);
}
