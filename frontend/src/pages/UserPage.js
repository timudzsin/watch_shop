import React from "react";
import Navbar from "../components/Navbar";
import { Outlet } from "react-router-dom";
import "./UserPage.css";

export default function UserPage() {
	return (
		<div className="UserPage">
			<main>
				<Outlet></Outlet>
			</main>

			<Navbar></Navbar>
		</div>
	);
}
