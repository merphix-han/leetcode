SELECT Score,
CASE WHEN @preRand = Score THEN CONVERT(@currRand,SIGNED)
WHEN @preRand := Score THEN CONVERT(@currRand := @currRand +1 ,SIGNED)
ELSE @currRand := @currRand +1  
END
AS Rank
FROM Scores,(SELECT @currRand := 0,@preRand := null) p ORDER BY Score DESC