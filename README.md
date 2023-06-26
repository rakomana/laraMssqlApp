composer install

composer run-script post-root-package-install

composer run-script post-create-project-cmd

php artisan migrate

php artisan db:seed
## Seeding with fake data

## MSSQL Stored Procedures to run

## First Stored Procedure To Create
USE laraMssqlApp

GO
SET ANSI_NULLS ON
GO


SET QUOTED_IDENTIFIER ON
GO


CREATE PROCEDURE uspGetBigSpenders
AS BEGIN
  SELECT TOP 10 SUM(o.total_amount) AS total,c.name AS full_name FROM orders o
	LEFT JOIN customers c ON o.customer_id = c.id
	GROUP BY o.total_amount, c.name
	ORDER BY total_amount DESC
END

EXEC uspGetBigSpenders

## Second Stored Procedure To Create
USE laraMssqlApp

GO

SET ANSI_NULLS ON
GO


SET QUOTED_IDENTIFIER ON
GO


ALTER PROCEDURE uspGeTQuantityOverQuality
AS BEGIN
  SELECT TOP 10 COUNT(*) AS total, c.name as full_name FROM orders o
	LEFT JOIN customers c ON o.customer_id = c.id
	GROUP BY c.name
	ORDER BY total DESC
END

EXEC uspGeTQuantityOverQuality