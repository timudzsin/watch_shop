import React, { useState } from "react";
import axios from "axios";
import "./RegisterForm.css";
import { useNavigate } from "react-router-dom";
import "./LoginForm.css";

export default function LoginForm() {
	const [name, setName] = useState("");
	const [password, setPassword] = useState("");

	const navigate = useNavigate();

	const handleSubmit = (e) => {
		e.preventDefault();

		axios
			.post("http://localhost:8000/api/login", {
				name,
				password,
			})
			.then(function (response) {
				console.log(response);

				// token lementése és beállítása
				const token =
					response?.data?.token || response?.data?.access_token || response?.data?.data?.token || null;
				if (token) {
					localStorage.setItem("token", token);
					console.log("Token mentve:", token);
				}

				// mezők törlése
				setName("");
				setPassword("");

				// átnavigálás a /user oldalra
				navigate("/user");
			})
			.catch(function (error) {
				console.log(error);
			});
	};

	return (
		<form className="LoginForm" onSubmit={handleSubmit}>
			<input value={name} onChange={(e) => setName(e.target.value)} placeholder="Name" />

			<input
				type="password"
				value={password}
				onChange={(e) => setPassword(e.target.value)}
				placeholder="Password"
			/>

			<button type="submit">Login</button>
		</form>
	);
}
