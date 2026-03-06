import React, { useEffect, useContext } from "react";
import Watches from "../components/Watches";
import { WatchesContext } from "../contexts/WatchesContext";

export default function WatchesPage() {
	const { getWatches } = useContext(WatchesContext);

	useEffect(() => {
		getWatches();
	}, []);

	return (
		<div className="WatchesPage">
			<Watches></Watches>
		</div>
	);
}
