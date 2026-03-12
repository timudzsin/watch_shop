import React, { useEffect } from "react";
import { useNavigate } from "react-router-dom";

export default function LoginPage() {
	const navigate = useNavigateigate();

	useEffect(() => {
		const token = localStorage.getItem("token");
		// Ha van token, átirányítás a /user oldalra
		if (token) {
			console.log("be van már jelentkezve a felhasználó, átiránítás a /user oldalra");
			navigate("/user", { replace: true });
		}
	}, []); // csak egyszer, a komponens mountolásakor lefut

	return <div className="LoginPage">LoginPage</div>;
}
