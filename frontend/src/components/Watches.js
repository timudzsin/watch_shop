import React, { useContext } from "react";
import { WatchesContext } from "../contexts/WatchesContext";
import Watch from "./Watch";
import "./Watches.css";

export default function Watches() {
	const { watches } = useContext(WatchesContext);

	return (
		<div className="Watches">
			{watches.map((element, index) => {
				return <Watch key={index} watch={element}></Watch>;
			})}
		</div>
	);
}
