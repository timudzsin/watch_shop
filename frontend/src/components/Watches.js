import React, { useContext } from "react";
import { WatchesContext } from "../contexts/WatchesContext";
import Watch from "./Watch";

export default function Watches() {
	const { watches } = useContext(WatchesContext);

	return (
		<div className="Watches">
			{watches.map((i, index) => {
				return <Watch key={index} watch={i}></Watch>;
			})}
		</div>
	);
}
