import React, { createContext, useState } from "react";
import axios from "axios";

export const WatchesContext = createContext();

export const WatchesProvider = ({ children }) => {
	const [watches, setWatches] = useState([]);

	async function getWatches() {
		try {
			const response = await axios.get("http://localhost:8000/api/watches");
			setWatches(response.data);
		} catch (error) {
			console.error("Hiba a karórák lekérésekor:", error);
		}
	}

	return (
		<WatchesContext.Provider
			value={{
				watches,
				getWatches,
			}}
		>
			{children}
		</WatchesContext.Provider>
	);
};
