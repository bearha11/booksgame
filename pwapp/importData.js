function importData ()
{
	d3.json("thematique.json", function (data)
	{
		console.log(data);
	})
}