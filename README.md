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
    select top 10 count(*) as total,c.name as full_name from orders o
	left join customers c on o.customer_id = c.id
	group by o.total_amount, c.name
	order by total_amount desc
END

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