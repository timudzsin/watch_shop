import React from "react";
import "./App.css";
import { BrowserRouter, Navigate, Route, Routes } from "react-router-dom";
import Navbar from "./components/Navbar";
import AboutPage from "./pages/AboutPage";
import WatchesPage from "./pages/WatchesPage";
import OrderPage from "./pages/OrderPage";
import RegisterPage from "./pages/RegisterPage";
import LoginPage from "./pages/LoginPage";
import AdminPage from "./pages/AdminPage";
import UserPage from "./pages/UserPage";

export default function App() {
	return (
		<div className="App">
			<BrowserRouter>
				<Routes>
					<Route path="/register" element={<RegisterPage></RegisterPage>}></Route>

					<Route path="/login" element={<LoginPage></LoginPage>}></Route>                                                 <Route path="/" element={<Navigate to="/login" replace />} />

                    <Route path="/user" element={<UserPage></UserPage>}>                                                            <Route path="/user" element={<Navigate to="/user/about" replace />} />
						<Route path="about" element={<AboutPage></AboutPage>}></Route>
						<Route path="watches" element={<WatchesPage></WatchesPage>}></Route>
						<Route path="order" element={<OrderPage></OrderPage>}></Route>
					</Route>

					<Route path="/admin" element={<AdminPage></AdminPage>}></Route>
				</Routes>
			</BrowserRouter>
		</div>
	);
}
