import React, { createContext, useState } from "react";
import axios from "axios";

export const WatchesContext = createContext();

export const WatchesProvider = ({ children }) => {
	const [watches, setWatches] = useState([]);

	async function getWatches() {
        axios.get("http://localhost:8000/api/watches")
        .then(function (response) {
            setWatches(response.data);
        })
        .catch(function (error){
            console.log(error);
        })
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
