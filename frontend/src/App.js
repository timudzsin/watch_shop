import React from "react";
import "./App.css";
import { BrowserRouter, Navigate, Route, Routes } from "react-router-dom";
import AboutPage from "./pages/AboutPage";
import WatchesPage from "./pages/WatchesPage";
import RegisterPage from "./pages/RegisterPage";
import LoginPage from "./pages/LoginPage";
import AdminPage from "./pages/AdminPage";
import UserPage from "./pages/UserPage";
import { WatchesProvider } from "./contexts/WatchesContext";
import CartPage from "./pages/CartPage";
import AccountPage from "./pages/AccountPage";

export default function App() {
	return (
		<div className="App">
			<WatchesProvider>
				<BrowserRouter>
					<Routes>
						<Route path="/" element={<Navigate to="/login" replace />} />

						<Route path="/register" element={<RegisterPage></RegisterPage>}></Route>

						<Route path="/login" element={<LoginPage></LoginPage>}></Route>

						<Route path="/user" element={<UserPage></UserPage>}>
							<Route index element={<Navigate to="about" replace />} />
							<Route path="about" element={<AboutPage></AboutPage>}></Route>
							<Route path="watches" element={<WatchesPage></WatchesPage>}></Route>
							<Route path="cart" element={<CartPage></CartPage>}></Route>
							<Route path="account" element={<AccountPage></AccountPage>}></Route>
						</Route>

						<Route path="/admin" element={<AdminPage></AdminPage>}></Route>
					</Routes>
				</BrowserRouter>
			</WatchesProvider>
		</div>
	);
}
