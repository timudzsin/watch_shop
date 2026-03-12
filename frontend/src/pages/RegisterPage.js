import React, { useEffect } from "react";
import RegisterForm from "../components/RegisterForm";
import "./RegisterPage.css";
import { useNavigate } from "react-router-dom";

export default function RegisterPage() {
	const navigate = useNavigate();

	useEffect(() => {
		const token = localStorage.getItem("token");
		// Ha van token, átirányítás a /user oldalra
		if (token) {
            console.log("be van már jelentkezve a felhasználó, átiránítás a /user oldalra")
			navigate("/user", { replace: true });
		}
	}, []); // csak egyszer, a komponens mountolásakor lefut

	return (
		<div className="RegisterPage">
			<RegisterForm></RegisterForm>
		</div>
	);
}
