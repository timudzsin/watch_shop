import React from "react";
import "./App.css";
import { BrowserRouter, Route, Routes } from "react-router-dom";
import Navbar from "./components/Navbar";
import AboutPage from "./pages/AboutPage";
import WatchesPage from "./pages/WatchesPage";
import OrderPage from "./pages/OrderPage";

export default function App() {
	return (
		<div className="App">
			<BrowserRouter>
				<main>
					<Routes>
						<Route path="/" element={<AboutPage></AboutPage>}></Route>
						<Route path="/watches" element={<WatchesPage></WatchesPage>}></Route>
						<Route path="/order" element={<OrderPage></OrderPage>}></Route>
					</Routes>
				</main>

				<Navbar></Navbar>
			</BrowserRouter>
		</div>
	);
}
