import React, { useState } from "react";
import axios from "axios";
import "./RegisterForm.css";

export default function RegisterForm() {
	const [name, setName] = useState("");
	const [password, setPassword] = useState("");

	const handleSubmit = async (e) => {
		e.preventDefault();

		try {
			const response = await axios.post("http://localhost:8000/api/register", {
				name,
				password,
			});

			console.log("Success:", response.data);
		} catch (error) {
			console.error("Error:", error);
		}
	};

	return (
		<form className="RegisterForm" onSubmit={handleSubmit}>
			<input value={name} onChange={(e) => setName(e.target.value)} placeholder="Name" />

			<input
				type="password"
				value={password}
				onChange={(e) => setPassword(e.target.value)}
				placeholder="Password"
			/>

			<button type="submit">Register</button>
		</form>
	);
}
