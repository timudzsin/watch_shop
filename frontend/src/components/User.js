import React, { useEffect, useState } from "react";
import axios from "axios";
import { useNavigate } from "react-router-dom";
import "./User.css";

export default function User() {
	const [user, setUser] = useState(null);
	const navigate = useNavigate();

	useEffect(() => {
		const token = localStorage.getItem("token");
		// ha nincs token, átirányítás loginra
		if (!token) {
			navigate("/login", { replace: true });
			return;
		}

		// Felhasználó adatok lekérése a /me végpontról
		axios
			.get("http://localhost:8000/api/me", {
				headers: { Authorization: `Bearer ${token}` },
			})
			.then(function (response) {
				console.log(response.data);
				setUser(response.data.user);
			})
			.catch((error) => {
				console.error("Hiba a felhasználó adatok lekérésekor:", error);
			});
	}, []);

	const handleLogout = () => {
		const token = localStorage.getItem("token");
		axios
			.post("http://localhost:8000/api/logout", {}, { headers: { Authorization: `Bearer ${token}` } })
			.then(() => {
				localStorage.removeItem("token"); // token törlése
				navigate("/login", { replace: true }); // vissza loginra
			})
			.catch((error) => console.error("Hiba a kijelentkezéskor:", error));
	};

	if (!user) return <div>Loading...</div>;

	return (
		<div className="User">
			<h2>{user.name}</h2>
			<button onClick={handleLogout}>Logout</button>
		</div>
	);
}
