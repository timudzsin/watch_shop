import React from "react";
import "./Watch.css";

export default function Watch(props) {
	return (
		<div className="Watch">
			<h1>{props.watch.name}</h1>
		</div>
	);
}
