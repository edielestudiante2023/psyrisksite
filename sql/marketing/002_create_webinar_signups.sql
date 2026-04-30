-- =============================================================================
-- 002_create_webinar_signups.sql
-- Tabla de inscritos al webinar gratuito sobre la batería de riesgo psicosocial.
-- Idempotente: CREATE TABLE IF NOT EXISTS — seguro de re-ejecutar.
-- =============================================================================

CREATE TABLE IF NOT EXISTS `webinar_signups` (
    `id`             INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name`           VARCHAR(120) NOT NULL,
    `email`          VARCHAR(190) NOT NULL,
    `phone`          VARCHAR(40) DEFAULT NULL,
    `company`        VARCHAR(180) DEFAULT NULL,
    `company_type`   ENUM('empresa','consultora','arl','otro') DEFAULT 'otro',
    `team_size`      VARCHAR(40) DEFAULT NULL,
    `utm_source`     VARCHAR(64) DEFAULT NULL,
    `utm_medium`     VARCHAR(64) DEFAULT NULL,
    `utm_campaign`   VARCHAR(64) DEFAULT NULL,
    `email_sent_at`  DATETIME DEFAULT NULL,
    `attended_at`    DATETIME DEFAULT NULL,
    `ip_address`     VARCHAR(45) DEFAULT NULL,
    `user_agent`     VARCHAR(255) DEFAULT NULL,
    `created_at`     DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    UNIQUE KEY `uniq_email` (`email`),
    KEY `idx_company_type` (`company_type`),
    KEY `idx_created_at` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =============================================================================
-- DOWN (rollback) — descomentar para revertir
-- =============================================================================
-- DROP TABLE IF EXISTS `webinar_signups`;
